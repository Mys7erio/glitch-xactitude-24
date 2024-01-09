#!/usr/bin/python3

# Authentication routes

from flask import Blueprint, render_template, request, redirect, session, flash
from .models import Users
from . import bcrypt, db

auth_bp = Blueprint('auth', __name__)


@auth_bp.route('/login')
def login():
    if 'ecom_user' in session:
        return redirect('/dashboard')
    return render_template('login.html')
    
@auth_bp.route('/register')
def register():
    if 'ecom_user' in session:
        return redirect('/dashboard')
    return render_template('register.html')
    
@auth_bp.route('/auth/verify', methods=['POST'])
def auth_verify():
    username = request.form.get('username')
    password = request.form.get('password')

    user = Users.query.filter_by(username=username).first()

    if user and bcrypt.check_password_hash(user.password, password):
        session['ecom_user'] = username
        return redirect('/dashboard')
    else:
        flash("Incorrect username or password", "error")
        return redirect('/login')
        
@auth_bp.route('/auth/register', methods=['POST'])
def auth_register():
    username = request.form.get('username')
    password = request.form.get('password')
    confpass = request.form.get('confirm_pass')

    if password != confpass:
        flash('Passwords do not match','error')
        return redirect('/register')

    existing_user = Users.query.filter_by(username=username).first()

    if existing_user:
        flash('Email already exists', 'error')
        return redirect('/register')
    
    hashed_pw = bcrypt.generate_password_hash(password).decode('utf-8')
    new_user = Users(username=username, password=hashed_pw)
    db.session.add(new_user)
    db.session.commit()
    
    return redirect('/login')

@auth_bp.route('/logout')
def logout():
    session.pop('ecom_user', None)
    session.clear()
    return redirect('/')

