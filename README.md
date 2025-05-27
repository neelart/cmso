# cmso
The CMS system for servicing and maintaining websites based on static HTML files. It’s focused on smaller sized sites that require periodic updates. All the changes on the site get saved directly on the HTML files, this allows to eliminate the need of having a database server. Does not require any integration with the site, its enough to just fit the catalogue with the system in the root directory of the site. The system automatically scans the structure of the site and provides a convenient access to all the files through the web interface.

The main feature of Textolite is the visual editor with the ability to edit content without any forms of input, only requires a click on the element that is on the site. For more technical and serious changes provided a source code editor with a highlighted syntax and line numbering. Files with the following extensions are also supported html, htm, shtml, shtm, stm, xml, php, js, css. For downloading or deletion of files exists a convenient file manager with the ability to upload multiple files in batches to the server.

Default pass is "admin"

Installation

For a normal operation of the system users will need a web server Apache and PHP version 5.2 and above with a current mod_rewrite module. Users must unzip the downloaded archive to the root directory of the site. Must move on to the directory of the system through the address bar of the browser http://{mysite}/textolite/. The directory of the system can be renamed later on. If everything is done properly, the system will display an authorization form. The password is set by default as "admin". After the first login, users must change the password in the settings of the system.

The system needs a permission to record for its own catalogue and for all the files of the site. To prevent problems with displaying symbols that are not Latin, all the editable files should be in utf-8 encoding.

To launch the system under Nginx without Apache, users must configure the server using parameters from the file .htaccess. In this case the .htaccess can be deleted. For a standard installation the following code can be used:
index textolite.php;
if (!-e $request_filename) {rewrite ^/textolite/(.*)$ /textolite/textolite.php?query=$1}
location ~ \.(ini|log)$ {deny all;}
