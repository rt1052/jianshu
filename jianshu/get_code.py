#coding=utf-8

import urllib.request
import codecs


url = "https://www.jianshu.com/"
headers = {'User-Agent':'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:23.0) Gecko/20100101 Firefox/23.0'}
request = urllib.request.Request(url, headers=headers)
response= urllib.request.urlopen(request)

html = response.read()
html = html.decode("utf-8")
#print(html)

file = codecs.open('jianshu.html', 'a', encoding='utf-8')
file.write(html)