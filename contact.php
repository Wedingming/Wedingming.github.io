<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="UTF-8">
    <title>留言板</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>留言板</h1>
        <nav>
            <a href="index.html">首页</a>
            <a href="about.html">关于</a>
            <a href="test.html">测试页面</a>
            <a href="webs/index.html">常用网站</a>
            <a href="contact.php">留言板</a>
        </nav>
    </header>
    <main>
        <form action="save_message.php" method="post">
            <label for="name">你的名字：</label>
            <input type="text" id="name" name="name" required>
            <br>
            <label for="message">留言内容：</label>         
            <textarea id="message" name="message" required></textarea>
            <br>
            <button type="submit">提交留言</button>
        </form>
    </main>
</body>
</html>