# Post-me (73 Solves)
![Post-me](https://user-images.githubusercontent.com/61760291/100897026-8df56680-34bf-11eb-9926-94d0942bb755.png)

>Both **GET** and **POST** method is used to transfer data from client to server in HTTP protocol but Main difference between POST and GET method is that GET carries request parameter appended in **URL string** while POST carries request parameter in **message body** which makes it more secure way of transferring data from client to server in http protocol.

![Screenshot at 2020-12-02 18-09-04](https://user-images.githubusercontent.com/61760291/100899529-3f959700-34c2-11eb-8bad-a2cb9539047e.png)

So here we have a **GET** request with two parameters "username" and "password".
we  need to make POST request with "username" and "password" to get our FLAG.
To do that we can inspect the source code and change form method from GET to POST or with script python.

![Screenshot at 2020-12-02 18-25-00](https://user-images.githubusercontent.com/61760291/100900637-55578c00-34c3-11eb-9dc9-f886f3ecf080.png)


```python
import requests
u="http://40.117.144.78:8080/index.php"
data={"username":"anything","password":"blabla"}
res=requests.post(url=u,data=data)
print(res.text)
```
and we get the flag **securinets{Don\'t_send_sensitive_data_with_GET_request}**.
