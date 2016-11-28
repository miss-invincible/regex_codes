import re

pattern = r'(#|@)?(h|H)(a|A)(c|C)(k|K)(e|E)(r|R)(r|R)(a|A)(n|N)(k|K)'

n = int(input())
lines = []
count=0
for i in range(n):
    #lines.append(input())
    result = bool(re.search(pattern,input()))
    if result==True:
        count+=1 
print(count)





