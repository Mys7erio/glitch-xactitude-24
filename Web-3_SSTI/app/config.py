#!/usr/bin/python3

import os

curr_dir = os.path.dirname(os.path.abspath(__file__))
DB_PATH = os.path.join(curr_dir, 'db/auth.db')


class Config:
    SECRET_KEY = '8a7b#Bc1$%7dEf2Gh3*Jk1lMn0Pq4rSt5Uv6WxYz'
    #SECRET_KEY = os.getenv("SECRET_KEY")
    SQLALCHEMY_DATABASE_URI = 'sqlite:///' + DB_PATH
    SQLALCHEMY_TRACK_MODIFICATIONS = False

    
#	 TODO: try filesystem sessions if session concurrency issues occur
#    SESSION_TYPE = 'filesystem'
#    SESSION_FILE_DIR = 'sessions/'
