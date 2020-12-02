# LFI (79 Solves)
![Task](https://user-images.githubusercontent.com/61760291/100902695-6a351f00-34c5-11eb-95e2-728b3ee3473c.png)
>An attacker can use Local File Inclusion (LFI) to trick the web application into exposing or running files on the web server.

![Screenshot at 2020-12-02 18-42-41](https://user-images.githubusercontent.com/61760291/100903326-0eb76100-34c6-11eb-9f32-18baa2988270.png)
Here when we navigate between pages home ,about ,servies or contact we notice a GET parametre (page) that takes the page name.
Hmmm it seems that the page name was inluded directy without any sanitization(include($_GET['page']) ).
So we can change it and read any system file for example **/etc/password** by making "../../../../../etc/passwd".
![example](https://user-images.githubusercontent.com/61760291/100904319-31964500-34c7-11eb-8ae1-0ecda144cebf.png)

then we can get the flag by reading the file flag.txt in the root directory.

![Screenshot at 2020-12-02 18-54-31](https://user-images.githubusercontent.com/61760291/100904578-715d2c80-34c7-11eb-899a-dba19cc4f8e7.png)
