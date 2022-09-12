# Messenger 信使

This is a message tool. After a user leaves a message, you can get the message record by consulting the TXT file. Comments are anonymous. 

Change `$filename` in the `send.php` file to change the message log file name. **It is strongly recommended that you use complex strings for its filename to avoid guesswork. Also, you should use the HTTPS protocol in case someone gets the URL of the file.**

It is a simple tool for the time being, and there is no defense against possible attacks now.

If you find an error, make sure that the permission issues under the file directory are ok. Especially the file that `$filename` refers to.

---

这是一个留言工具，用户留言后，你可以通过查阅 TXT 文件来获取留言记录。留言是匿名的。

更改 `send.php` 文件中的 `$filename` 以更改留言记录文件名。**强烈建议您使用复杂的字符串作文件名，避免被人猜到。此外，您还应使用 HTTPS 协议，以防被人获取到该文件的 URL 。**

暂时是个简单的工具，没有针对可能的攻击做防御。

如果你遇到错误，请确保目录下文件的权限没有问题，尤其是对于 `$filename` 所指的文件。
