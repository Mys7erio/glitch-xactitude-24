#!/usr/bin/python3

import os

curr_dir = os.path.dirname(os.path.abspath(__file__))
DB_PATH = os.path.join(curr_dir, 'db/auth.db')

class Config:
    SECRET_KEY = os.urandom(32) or '8a7b#Bc1$%7dEf2Gh3*Jk1lMn0Pq4rSt5Uv6WxYz'
    SQLALCHEMY_DATABASE_URI = 'sqlite:///' + DB_PATH
    SQLALCHEMY_TRACK_MODIFICATIONS = False
