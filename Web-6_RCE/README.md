# RCE

Hosting:

```bash
docker build -t rce .
docker run -p 8080:80 rce
```

Solution:

1. Navigate to `<url>`/upload
2. Upload a reverse shell file.
3. Execute `cd ../flag; cat flag.txt`

Flag: `glitch{1_4M_B4tm4n}`
