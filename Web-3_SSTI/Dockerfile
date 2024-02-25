FROM python:3.11-slim

RUN apt-get update

RUN useradd -m sysuser
RUN echo "sysuser:sysuser3301!" | chpasswd

ENV SECRET_KEY=8a7b#Bc1$%7dEf2Gh3*Jk1lMn0Pq4rSt5Uv6WxYz

WORKDIR /webchal_3
COPY . /webchal_3
RUN mv .access-log /var/log/access.log ; chown sysuser:sysuser /var/log/access.log

RUN pip install --no-cache-dir -r requirements.txt

EXPOSE 8000
USER sysuser

CMD ["gunicorn", "--bind", "0.0.0.0:8000", "-w", "4", "--access-logfile", "/var/log/access.log", "run:app"]

# Development server
#CMD ["python3","run.py"]
