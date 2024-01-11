#!/usr/bin/python3

from flask import Flask, render_template, session, redirect, render_template_string, request 
from .config import Config
from .models import db, bcrypt
from .auth import auth_bp

import os

def create_app():
    app = Flask(__name__)
    app.config.from_object(Config)

    db.init_app(app)
    bcrypt.init_app(app)

    app.register_blueprint(auth_bp)

    @app.route('/')
    def index():
        return render_template("index.html")

    @app.route('/dashboard')
    def dashboard():
        if 'ecom_user' not in session:
            return redirect('/login')        
        return render_template('dashboard.html')

    @app.route('/search', methods=['GET'])
    def search():
        if 'ecom_user' not in session:
            return redirect('/login')
        
        query = request.args.get('q', '')
        if query:
            with open('app/templates/search.html', 'r') as f:
                return render_template_string(f.read().replace("{{ resp }}", f"No results for \'{query}\'"))
            return render_template('search.html', resp=f"No results for \'{query}\'")

        return render_template('search.html')

    # auth restricted     
    @app.route('/profile')
    def profile():
        if 'ecom_user' not in session:
            return redirect('/login')

        username = session['ecom_user']
        with open('app/templates/profile.html', 'r') as f:
            pr = f.read()
            return render_template_string(pr.replace("{{ username }}", session['ecom_user']))

    return app

