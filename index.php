<?php
$page = $_GET['page'] ?? 'home';

if ($page == 'home') {
    echo "<h1>🏠 Home Page</h1>";
    echo "<p>Welcome to DevOps App</p>";
}
elseif ($page == 'about') {
    echo "<h1>📄 About Page</h1>";
    echo "<p>This app is deployed via AWS ECS</p>";
}
elseif ($page == 'contact') {
    echo "<h1>📞 Contact Page</h1>";
    echo "<p>Email: devops@example.com</p>";
}
else {
    echo "<h1>❌ 404 Page Not Found</h1>";
}

echo "<hr>";
echo "<a href='?page=home'>Home</a> | ";
echo "<a href='?page=about'>About</a> | ";
echo "<a href='?page=contact'>Contact</a>";

?>