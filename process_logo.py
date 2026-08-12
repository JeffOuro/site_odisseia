import sys
import subprocess

try:
    from PIL import Image
except ImportError:
    subprocess.check_call([sys.executable, "-m", "pip", "install", "Pillow"])
    from PIL import Image

def remove_white_background(input_path, output_path):
    img = Image.open(input_path).convert("RGBA")
    data = img.getdata()
    
    new_data = []
    # threshold for white
    for item in data:
        # item is (R, G, B, A)
        if item[0] > 240 and item[1] > 240 and item[2] > 240:
            # Change all white (also shades of whites)
            # to transparent
            new_data.append((255, 255, 255, 0))
        else:
            new_data.append(item)
            
    img.putdata(new_data)
    img.save(output_path, "PNG")

remove_white_background("logo.jpeg", "public/images/logo.png")
