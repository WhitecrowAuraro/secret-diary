# My Secret Diary

Forget wearing your physical diary everywhere. Now it's online.

###Installation guide###

1. Create a MySQL database.

2. Run this SQL query:

```sql
CREATE TABLE IF NOT EXISTS `users` (
`id` int(11) NOT NULL AUTO_INCREMENT,
`email` text NOT NULL,
`password` text NOT NULL,
`diary` text,
PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
```

3. Update line 6 in **connection.php** with your database access information.
