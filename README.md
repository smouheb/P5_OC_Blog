This is a blog created using PHP/OOP following the MVC design pattern.
IT is fully functional and can be used for quick deployment.
Nothing complicated in it, very basin blog offering few features like sending emails using external library SwiftMailer.

**Version:

1.0

**Technical enviornment:

PHP --> version 7.0.0 (recommended, specifically for SwiftMailer library as the version being used is 6.0, can be checked in "composer.json")
MySQL server --> Version 5.5.42 
Web Server Apache version --> 2.2.29 (Unix)

**Requirements:

**Homepage containing :

  - the logo of the website
  - photo of the blog (myself in this case)
  - description the blog host
  - CV
  - social network links
  - menu bar containing
 
**List of pages are:

  - home page, 
  - blog page
  - page to add a new blog post and logout if logged in*
  - contact form (name, email, message) with simple information
  - Admin page (to edit, add and remove the posts)

**Blog page containing :

  - List of blog posts from most recent to the oldest
  - Each blog post are showing in preview, the title, small description of the post, last modification date and the author and a link to read more

**Post page containing :

  - Blog article showing the title and the full content

**To install this blog, clone this repository or download the project and:

Step 1 : Create a database name it the way you want and import into it the sql file called 'yourname.sql' (I have left an example of the database configuration and the tables I have used under 'db.sql')
Step 3 : In model/BddConfig.php change the database's host/name/password to yours
Step 4 : To change the email service go to app/appController, in method "contacts", line between 125 and 127 add your email service(I have left gmail smtp configuration as an example and/or should you have the same), in other lines add your username and password. 
In line 133 add your email address or any email address that is meant to receive the email that will be sent from your blog.
Note: for me it worked locally as well
