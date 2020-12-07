# Easy SQLi (36 Solves)

![Task](https://user-images.githubusercontent.com/61760291/101360349-d46f0a80-389d-11eb-8a35-72ae45f5ba55.png)

In this challenge we have a simple login form.
It's a basic SQL injection task .
first we can try the common payload **'or 1=1**
however it didn't work it seems there is a filter somewhere *_*.

![screen](https://user-images.githubusercontent.com/61760291/101361220-f9b04880-389e-11eb-8d1a-0d5ac1fcf5c1.png)

we need to bypassed it so we can use `||` instead of `or` and get our flag .

![Screenshot at 2020-12-07 16-19-02](https://user-images.githubusercontent.com/61760291/101362147-071a0280-38a0-11eb-8033-ded0aa83acdf.png)




