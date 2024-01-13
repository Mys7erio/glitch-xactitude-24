#!/usr/bin/python3

from app import create_app

app = create_app()

if __name__ == "__main__":
	port = int(os.environ.get('PORT', 8000))
	app.run(debug=False, host='0.0.0.0', port=port)
