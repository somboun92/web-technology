FROM php:8.2-cli

# คัดลอกไฟล์ทั้งหมดไปใน container
COPY . /usr

# ตั้ง working directory
WORKDIR /usr

# เปิด port 8000
EXPOSE 8000

# รัน PHP built-in web server
CMD [ "php", "-S", "0.0.0.0:8000", "-t", "/usr" ]
RUN docker-php-ext-install pdo pdo_mysql

