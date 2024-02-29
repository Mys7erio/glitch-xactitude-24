FROM python:3.11-slim
     
RUN useradd -m sysuser
RUN echo "sysuser:sysuser3301!" | chpasswd

COPY requirements.txt /tmp/tempreq
RUN pip install --no-cache-dir -r /tmp/tempreq

USER sysuser

ENV SECRET_KEY=8a7b#Bc1$%7dEf2Gh3*Jk1lMn0Pq4rSt5Uv6WxYz
WORKDIR /webchal_3
COPY --chown=sysuser:sysuser . /webchal_3

EXPOSE 8000

CMD ["gunicorn", "--bind", "0.0.0.0:8000", "-w", "4", "run:app"]


