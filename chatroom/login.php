if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $gmail = trim($_POST['user']);
        $password = trim($_POST['pass']);

        if (empty($gmail) || empty($password)) {
            die("⚠️ Username/Email and Password are required!");
        }

        // Connect to the database
        $conn = new mysqli("localhost", "root", "", "chatroom");

        if ($conn->connect_error) {
            die("❌ Connection failed: " . $conn->connect_error);
        }

        // Allow login via username or email
        $stmt = $conn->prepare("SELECT usr_name, usr_pass FROM stud_data WHERE usr_name=? OR usr_gmail=? LIMIT 1");
        $stmt->bind_param("ss", $gmail, $gmail);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            die("❌ Invalid Username or Password!");
        } else {
            $row = $result->fetch_assoc();
            if (password_verify($password, $row['usr_pass'])) {
                session_start();
                $_SESSION['username'] = $row['usr_name'];
                die("✅ Login successful! Redirecting...");
                header("Location: chat/chat.php");
                exit();
            } else {
                die("❌ Incorrect Password!");
            }
        }

        $stmt->close();
        $conn->close();
    } else {
        die("⚠️ Form data missing!");
    }
} else {
    header("Location: index.php");
    exit();
}
