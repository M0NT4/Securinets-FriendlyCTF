# l33se c3mp4r1s0n (43 Solves)

![Task](https://user-images.githubusercontent.com/61760291/101046197-230c6400-3581-11eb-9423-16b29f9da048.png)

In this challenge we are given the source code.
we will focus on this part :

```php
$input=$_GET['magic'];
	if(hash('md5',$input)=="0"){
		echo ("congrats !! \n");
		echo ($flag);
```
A loose comparison is one performed using two equals signs (==).
This table summarizes the php loose comparaison logic :

![Table](https://user-images.githubusercontent.com/61760291/101047161-ed1baf80-3581-11eb-8e31-eb03823fc515.png)

>It gets weirder... If PHP decides that both operands look like
numbers, even if they are actually strings, it will convert them
both and perform a numeric comparison:
▪ TRUE: "0e12345" == "0e54321"
▪ TRUE: "0e12345" <= "1" 
▪ TRUE: "0e12345" == "0" 
▪ TRUE: "0xF" == "15" 

So here we have to find md5 hash string starting with "0e" which make the comparison evaluate to true.
just googling it we can find many magic hashes .[link](https://github.com/spaze/hashes/blob/master/md5.md)
we can choose **240610708** and his md5 hash **0e462097431906509019562988736854**.
and then get the flag.

![Solve](https://user-images.githubusercontent.com/61760291/101070538-c9fdf980-359b-11eb-9883-3f4e702e0c7b.png)

