# Use an official Nginx image as the base image
FROM nginx:latest

# Copy the HTML and CSS files to the default Nginx web server directory
COPY . /usr/share/nginx/html/

# Expose port 80 to the outside world
EXPOSE 80

# Command to start Nginx when the container starts
CMD ["nginx", "-g", "daemon off;"]
