# QR Code Generator

This is a simple web-based QR Code Generator built with **PHP**, **Bootstrap 5**, and the **[Endroid QR Code](https://github.com/endroid/qr-code)** library. It allows users to dynamically generate QR codes from text or URLs.

## 🚀 Features

- Generate QR codes instantly from user input.
- Responsive interface using Bootstrap 5.
- Saves generated QR code images to a temporary folder.
- Clean and modern UI.
- Easy to customize and extend.

## 📸 Screenshot
![image](https://github.com/user-attachments/assets/2efa0013-1bd2-4085-8e5b-041fab9dd0a2)


## 🛠️ Installation

1. **Clone the repository**

   ```bash
   git clone https://github.com/JimKatsiou/qr-code-generator.git
   cd qr-code-generator
   
2. **Install dependencies with Composer**
   ```bash
   composer install   
3. **Ensure GD extension is enabled in your PHP config**
Open your php.ini file and make sure the following line is uncommented (no semicolon at the start):
    ```bash
   extension=gd
Then restart your local server (Apache or Nginx).

4. **Create a temp folder**
This folder will store generated QR code images:
    ```bash
   mkdir temp
   chmod 755 temp

5. **Run on localhost**


## ✨ Usage

1. Enter your text or URL.
2. Click **"Generate QR Code"**.
3. The generated QR code will appear below the form.

## 🧩 Dependencies

- PHP 7.4+
- Composer
- Bootstrap 5
- Endroid QR Code

## 📄 License

This project is licensed under the MIT License.

## 👨‍💻 Author

Created by [Jim Katsiou](https://github.com/JimKatsiou)

Feel free to contribute or suggest features!
