# HackMe (43 Solves)
![Task](https://user-images.githubusercontent.com/61760291/101027718-aecdc280-3578-11eb-9141-85b1cdbd1306.png)

In this challenge we are given the source code.
we will focus on this part :
```php
$input =$_GET['input'];
$str = "securinets_is_the_best";
$final=preg_replace("/$str/", '', $input);
if ($final === $str){
	echo ('flag = '.$flag);
```
Here we have to submit the string **securinets_is_the_best** as input in the GET request to get the flag however the preg_replace() function replace our input to empty string :'( so how can we baypass this shit ??

`preg_replace() Perform a regular expression search and replace.`
Does it replace recursively ?? 
Surely no !!
So what if we inject our string into the same string ,for example we put it after 'is' : 
securinets_is __securinets_is_the_best__ _the_best
here preg_replace() will replace only only once and the final string will be **securinets_is_the_best_the_best**.


![Solve](https://user-images.githubusercontent.com/61760291/101042599-a7f57e80-357d-11eb-8a0d-bb618d67d766.png)
