FROM python:3.11-slim

RUN apt-get update

EXPOSE 8000

WORKDIR /webchal_3
COPY . /webchal_3
RUN pip install --no-cache-dir -r requirements.txt

# Development server
#CMD ["python3","run.py"]

# production server
CMD ["gunicorn", "--bind", "0.0.0.0:8000", "-w", "4", "--access-logfile", ".access-log", "run:app"]
