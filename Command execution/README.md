# Command execution (45 Solves)
![TASK](https://user-images.githubusercontent.com/61760291/100906059-0ad90e00-34c9-11eb-9328-8cf2fb89cb77.png)

>Command injection is an attack in which the goal is execution of arbitrary commands on the host operating system via a vulnerable application. Command injection attacks are possible when an application passes unsafe user supplied data (forms, cookies, HTTP headers etc.) to a system shell.

![task](https://user-images.githubusercontent.com/61760291/100906560-96529f00-34c9-11eb-9a65-6a04aa5c8cc9.png)
the web app takes the input and executes a ping command in the server and returns the result if it's a valid command!!
so what if we trick it by trying to run an other system command.
In linux systems there is many methods to run multiple commands in one line with `;`, `&&` and `||`.
__exemple__ : `cmd1 ; cmd 2`
so let's try `;`
**127.0.0.1;ls** 
>ls is a Linux shell command that lists directory contents.

![Screenshot at 2020-12-02 19-27-55](https://user-images.githubusercontent.com/61760291/100908820-3c070d80-34cc-11eb-95cf-d9beddeb775e.png)

However,a new message was shown "hey Hacker u are in the right way just try to bypass my strong filter x_x"
It seems `;` was filtered.
We can try "&&" but it was filtered x_x .
`||` wasn't filtered but it only works when there is an error in the first command.

The final payload is **blabla||cat /flag.txt**

![Solve](https://user-images.githubusercontent.com/61760291/100911738-e6346480-34cf-11eb-9961-d59724149e2f.png)


