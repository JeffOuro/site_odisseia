import urllib.request
import re
from collections import Counter

url = "https://ebook.odisseiafilosofica.com.br"
req = urllib.request.Request(url, headers={'User-Agent': 'Mozilla/5.0'})
try:
    html = urllib.request.urlopen(req).read().decode('utf-8')
    
    # Extract hex colors
    colors = re.findall(r'#(?:[0-9a-fA-F]{3}){1,2}\b', html)
    color_counts = Counter(colors)
    print("Most common colors:")
    for c, count in color_counts.most_common(10):
        print(f"{c}: {count}")
        
    # Extract fonts
    fonts = re.findall(r'font-family:[^;\"\}]+', html)
    font_counts = Counter(fonts)
    print("\nFonts:")
    for f, count in font_counts.most_common(5):
        print(f"{f}: {count}")
        
    # Extract classes to see if they use tailwind or elementor
    if 'elementor' in html:
        print("\nPage uses Elementor")
    if 'tailwind' in html:
        print("\nPage uses Tailwind")
        
except Exception as e:
    print(f"Error: {e}")
