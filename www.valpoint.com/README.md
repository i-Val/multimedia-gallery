# PHP gallery with login sytem

This project is a simple gallery which includes login system.

All the coding is done using PHP and is based mainly on proceedural programing.

Basically, only members are allowed to view the "galleries". Registered members must log in to view gallery.

If user is logged in as *Admin* they'll have greater privileges and access.

# Features

### 1.  audio, video and image gallery.
The projects includes three separate galleries for audio, video and audio files.

### 2.  File uplaods
A simple upload form for uploading files to the gallery.

### 3.  Automatic sorting of files
The upload form above is designed to sort uploaded files. If selected file is an image, it wilk be sent to image gallery. The same goes for vidoes and audio files.

### 4.  Sign in and login system
A sign up form for registering users on the database.

### 5.  Special privileges above granted to admin
If logged in as admin, one will be granted special access as described below.



# Admin privileges

To access administrative privileges, log in with username: Admin and password:benevolent. Then you'll have access to...

### 1. File upload and deleting
Admin has the sole privilege of uploading to and deleting from the gallery.

### 2.  View user detail.
From the admin panel, admin can either view details of a provided username or view all user details.

### 3. Clear gallery
Admin can also clear any of the galleries from database.

# Installation
**For this project to work properly, follow the simple steps below**
1. Unpack the file into your root folder.

2. Create Mysqli database with name:valpoint.

3. Create 4 tables, namely: users, musics, images and videos.

4. Users table will have 6 columns, namely: id, date, name, surname, username and password.

5. Musics, images and videos table will each have 4 columns, namely: id, filename, uploaded and givenName.

# Understanding the file hierarchy
* ### Root folder:
This contains the home page (index.php). In addition it contains all pages with html markup.

* ### Accessory folders which include:
    * /css
    * /js
    * /icons
    * /images
    * /includes
    * /uploads
The first 4 folders are self explanatory in my opinion.

* ### /includes
This contains all the pure PHP files which include form handlers, database handlers, connections, etc.

* ### /uploads which includes:
    * /videos
    * /musics
    * /images
    
 **Note :** While user details and file details are stored in database, the actual files are stored in the server as you would have noticed. So, if you delete files from database, you will still have to delete same from your device(i.e. your uploads folder).