#Executing a simple php app via NGINX server


# Step 1: Use an official image as a base
FROM nginx:latest

# Step 2: Install Git to clone the repository
RUN apt-get update && apt-get install -y git
RUN git --version

# Step 3: Set the working directory inside the container
WORKDIR /usr/share/nginx/html

# Step 4: Clone your Git repository (Replace with your actual Git repo URL)
RUN git clone https://github.com/pavithrandsp/php.git

# Step 5: Remove the default NGINX index.html (if necessary)
RUN rm -rf /usr/share/nginx/html/*

# Step 6: Copy the cloned files to NGINX's default directory
COPY . /usr/share/nginx/html

# Step 7: Expose port 80 for NGINX
EXPOSE 80

# Step 8: Start NGINX
CMD ["nginx", "-g", "daemon off;"]
