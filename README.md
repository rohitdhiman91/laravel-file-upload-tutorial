# 📂 Laravel File Upload Tutorial

A beginner-friendly example of how to upload files in Laravel.

---

## 🚀 Features
- Upload single file (image/pdf)
- Store file inside `storage/app/public/uploads`
- Validation for file type & size
- Display success message + file path

---

## 🛠️ Installation
1. Clone this repo  
   ```bash
   git clone https://github.com/your-username/laravel-file-upload-tutorial.git
   cd laravel-file-upload-tutorial
````

2. Install dependencies

   ```bash
   composer install
   cp .env.example .env
   php artisan key:generate
   ```

3. Link storage (to make files accessible)

   ```bash
   php artisan storage:link
   ```

4. Run server

   ```bash
   php artisan serve
   ```

---

## 📌 Usage

* Visit: `http://127.0.0.1:8000/upload`
* Choose a file and upload
* File gets stored in `storage/app/public/uploads`

---

## 💡 Next Steps

* Add multiple file upload
* Store file paths in database
* Upload to cloud (AWS S3, DigitalOcean Spaces, etc.)