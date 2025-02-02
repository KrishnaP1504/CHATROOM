## Chatroom Project

A real-time chatroom application built with PHP, JavaScript, and MySQL.

## Features
- User authentication (Login & Registration)
- Real-time chat functionality
- Online user status display
- Emoticon support
- Notifications for new messages
- Responsive chat interface

## Installation

### Prerequisites
- PHP (>= 7.0)
- MySQL database
- Apache server or XAMPP/WAMP/MAMP

### Setup Instructions
1. Clone or download the project files.
2. Import the `chatroom.sql` file into your MySQL database.
3. Configure the database connection in `includes/config.php`.
4. Start the Apache and MySQL server.
5. Open the project in your browser via `http://localhost/ch-ro-pr/`.

## Usage
- Register an account.
- Log in to access the chatroom.
- Start chatting with online users in real-time.

## File Structure
```
ch-ro-pr/
│-- chatroom.sql        # Database schema
│-- index.php          # Home/Login page
│-- login.php          # Login functionality
│-- logout.php         # Logout functionality
│-- reg.php            # Registration page
│-- submit.php         # Form submission handling
│-- chat/              # Chat system files
│   ├── chat.php       # Chat interface
│   ├── chat.js        # Chat functionality (AJAX, jQuery)
│   ├── chat.css       # Styling for chat
│   ├── chatFunctions.php # Chat logic
│   ├── show_online.php  # Displays online users
│-- includes/          # Configuration files
│   ├── config.php     # Database connection settings
│   ├── const.php      # Constants
│   ├── init.php       # Initialization script
│-- images/smileys/    # Emoticons for chat
│-- sound/             # Notification sounds
```

## Technologies Used
- **Frontend:** HTML, CSS, JavaScript, jQuery
- **Backend:** PHP
- **Database:** MySQL

## Contributing
Feel free to submit issues or pull requests to improve the project.

## License
This project is open-source and available under the MIT License.

