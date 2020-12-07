# SQLi 2 (15 Solves)

![Task](https://user-images.githubusercontent.com/61760291/101362523-83ace100-38a0-11eb-8453-617f430d03b7.png)

Here we if we use this payload `'or 1=1 -- -` we connect as a normal user but we need to connect as amdin to get the flag.
If we check the hint `maybe LIMIT can help u` and after some googling we can figure out that using LIMIT in the SELECT query specify the number of records to return.

for example in this case:
LIMIT 1,1 return the first user in the database.
LIMIT 1,2 return the second user which is the admin.
Payload : `aa'or 1=1 LIMIT 1,2 -- -`

![Solve](https://user-images.githubusercontent.com/61760291/101364210-9c1dfb00-38a2-11eb-8b8f-dfbaa1b47879.png)
