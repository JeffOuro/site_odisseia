import re

with open('ebook_js.txt', 'r', encoding='utf-8') as f:
    content = f.read()

# Find strings that look like tailwind classes
classes = set()
for match in re.finditer(r'(?:class(?:Name)?=["\']|class:\s*["\'])(.*?)(?:["\'])', content):
    for c in match.group(1).split():
        if c:
            classes.add(c)

# also just find any string with bg- or text- or font-
for match in re.finditer(r'["\']([a-zA-Z0-9_-]*?(?:bg-|text-|font-|border-|shadow-)[a-zA-Z0-9_#-]+(?:\s+[a-zA-Z0-9_-]*?(?:bg-|text-|font-|border-|shadow-)[a-zA-Z0-9_#-]+)*)["\']', content):
    for c in match.group(1).split():
        if c:
            classes.add(c)

sorted_classes = sorted(list(classes))
print("\n".join([c for c in sorted_classes if c.startswith('bg-') or c.startswith('text-') or c.startswith('font-')]))

