![Mooz Template](https://i.imgur.com/bVY5OIB.png)

> Ordered numerically

### ERR0R 001
*This error occurs when the folder where the css style settings will be saved is not readable or cannot be written to the file*
#### Solution
*Assigning 776 permission to the `/custom/templates/Mooz/core/settings/` folder if it doesn't work you can use the unsafe way which is to add 777 to such folder*




### ERR0R 002
*This error occurs when the folder where the Mooz css and js styles are cannot be read.*
#### Solution
*Assigning 776 permission to the `/custom/templates/Mooz/core/assets/` folder if it doesn't work you can use the unsafe way which is to add 777 to such folder*




### ERR0R 003
*This error occurs when a custom Mooz language is not readable*
#### Solution
*Assigning 776 permission to the `/custom/templates/Mooz/core/panel/KASDISAASDYIADG.php` file if it doesn't work you can use the unsafe way which is to add 777 to such folder*





### ERR0R 004 [NO PASA]
*This error occurs when the Styles file is not readable or writable or even when it does not exist*
#### Solution
*Assigning 776 permission to the `/custom/templates/Mooz/core/` folder if it doesn't work you can use the unsafe way which is to add 777 to such folder*




### ERR0R 005
*This error occurs when the Styles file is not readable or writable or even when it does not exist*
#### Solution
To fix error 005 you should be logged in as administrator, but if not, we also have another option
==== Started as administrator (in the panel section it will show you the error you just have to click Yes and the template will start the reinstallation process if it is not effective use the next step)

==== You are not logged in as administrator (If for some reason you cannot enter the panel, you can go to the folder that contains the NamelessMC installation and go to the `/cache/` folder, there you should look for the file `d158baba76918cba404ac4ed3da2b2ff345227cd.cache` and remove it, before reloading the page, go to  `/custom/templates/Mooz/core/settings` and rename `styles.light.json` to `styles.json` after you do, you can reload the page and it should work fine)
