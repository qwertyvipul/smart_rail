import numpy as np
import cv2
import math

img = cv2.imread('map.png')

d = {'func': lambda tp1, tp2 : int(math.sqrt(math.pow((tp1[0]-tp2[0]),2)+math.pow((tp1[1]-tp2[1]),2)))}

nodes = {'A':(273,28), 'B':(597,12), 'C':(52,104), 'D':(111,104), 'E':(178,104), 'F':(273,104), 'G':(375,104), 'H':(465,104), 'I':(597,104), 'J':(714,104), 'K':(797,104), 'L':(873,104), 'M':(50,135), 'N':(172,153), 'O':(390,153), 'P':(639,153), 'Q':(861,153), 'R':(51,331), 'S':(92,305), 'T':(221,305), 'U':(441,305), 'V':(699,305), 'W':(874,305)}

print('enter the x value of starting point')
xs = input()

print('enter the y value of starting point')
ys = input()

print('enter the x value of end point')
xe = input()

print('enter the y value of end point')
ye = input()

startn = (int(xs),int(ys))
endn = (int(xe),int(ye))
minimum = 1000
minimumn = 'A'
st = 'A'
en = 'A'
wc = 481
hc = 205

for n, t in nodes.items():
    dis1 = d['func'](startn, t)
    if (t[0]<=hc and startn[0]<=hc):
        if(t[1]<=wc and startn[1]<=wc):
            if(dis1<minimum):
                minimum = dis1
                minimumn = n
        if(t[1]>=wc and startn[1]>=wc):
            if(dis1<minimum):
                minimum = dis1
                minimumn = n
    if (t[0]>hc and startn[0]>hc):
        if(t[1]<wc and startn[1]<wc):
            if(dis1<minimum):
                minimum = dis1
                minimumn = n
        if(t[1]>wc and startn[1]>wc):
            if(dis1<minimum):
                minimum = dis1
                minimumn = n
startNode=minimumn
st = minimumn
minimumn = 'Q'
minimum = 1000

for n, t in nodes.items():
    dis = d['func'](endn, t)
    if (t[0]<=hc and endn[0]<=hc):
        if(t[1]<=wc and endn[1]<=wc):
            if(dis<minimum):
                minimum = dis
                minimumn = n
        if(t[1]>=wc and endn[1]>=wc):
            if(dis<minimum):
                minimum = dis
                minimumn = n
    if (t[0]>hc and endn[0]>hc):
        if(t[1]<wc and endn[1]<wc):
            if(dis<minimum):
                minimum = dis
                minimumn = n
        if(t[1]>wc and endn[1]>wc):
            if(dis<minimum):
                minimum = dis
                minimumn = n
endNode = minimumn
en = minimumn

neigh = {
    'A':{'F':d['func'](nodes['A'], nodes['F'])},
    'B':{'I':d['func'](nodes['B'], nodes['I'])},
    'C':{'D':d['func'](nodes['C'], nodes['D'])},
    'D':{'M':d['func'](nodes['D'], nodes['M']), 'E':d['func'](nodes['D'], nodes['E']), 'C':d['func'](nodes['D'], nodes['C'])},
    'E':{'D':d['func'](nodes['D'], nodes['E']), 'F':d['func'](nodes['E'], nodes['F'])},
    'F':{'A':d['func'](nodes['A'], nodes['F']), 'G':d['func'](nodes['F'], nodes['G']), 'O':d['func'](nodes['F'], nodes['O']), 'N':d['func'](nodes['F'], nodes['N']), 'E':d['func'](nodes['F'], nodes['E'])},
    'G':{'F':d['func'](nodes['G'], nodes['F']), 'H':d['func'](nodes['G'], nodes['H'])},
    'H':{'G':d['func'](nodes['H'], nodes['G']), 'I':d['func'](nodes['H'], nodes['I'])},
    'I':{'B':d['func'](nodes['I'], nodes['B']), 'J':d['func'](nodes['I'], nodes['J']), 'Q':d['func'](nodes['I'], nodes['Q']), 'P':d['func'](nodes['I'], nodes['P']), 'H':d['func'](nodes['I'], nodes['H'])},
    'J':{'I':d['func'](nodes['J'], nodes['I']), 'K':d['func'](nodes['J'], nodes['K'])},
    'K':{'J':d['func'](nodes['K'], nodes['J']), 'L':d['func'](nodes['K'], nodes['L'])},
    'L':{'L':d['func'](nodes['L'], nodes['K']), 'Q':d['func'](nodes['L'], nodes['Q'])},
    'M':{'D':d['func'](nodes['M'], nodes['D']), 'N':d['func'](nodes['M'], nodes['N']), 'R':d['func'](nodes['M'], nodes['R'])},
    'N':{'M':d['func'](nodes['N'], nodes['M']), 'F':d['func'](nodes['N'], nodes['F']), 'O':d['func'](nodes['N'], nodes['O'])},
    'O':{'N':d['func'](nodes['O'], nodes['N']), 'F':d['func'](nodes['O'], nodes['F']), 'P':d['func'](nodes['O'], nodes['P'])},
    'P':{'O':d['func'](nodes['P'], nodes['O']), 'I':d['func'](nodes['P'], nodes['I']), 'Q':d['func'](nodes['P'], nodes['Q'])},
    'Q':{'I':d['func'](nodes['Q'], nodes['I']), 'L':d['func'](nodes['Q'], nodes['L']), 'P':d['func'](nodes['Q'], nodes['P'])},
    'R':{'M':d['func'](nodes['R'], nodes['M']), 'S':d['func'](nodes['R'], nodes['S']), 'T':d['func'](nodes['R'], nodes['T'])},
    'S':{'R':d['func'](nodes['S'], nodes['R']), 'T':d['func'](nodes['S'], nodes['T'])},
    'T':{'S':d['func'](nodes['T'], nodes['S']), 'R':d['func'](nodes['T'], nodes['R']), 'U':d['func'](nodes['T'], nodes['U'])},
    'U':{'T':d['func'](nodes['U'], nodes['T']), 'V':d['func'](nodes['U'], nodes['V'])},
    'V':{'U':d['func'](nodes['V'], nodes['U']), 'W':d['func'](nodes['V'], nodes['W'])},
    'W':{'V':d['func'](nodes['W'], nodes['V'])}}

dist = {'A':1000, 'B':1000, 'C':1000, 'D':1000, 'E':1000, 'F':1000, 'G':1000, 'H':1000, 'I':1000, 'J':1000, 'K':1000, 'L':1000, 'M':1000, 'N':1000, 'O':1000, 'P':1000, 'Q':1000, 'R':1000, 'S':1000, 'T':1000, 'U':1000, 'V':1000, 'W':1000}
flag = {'A':0, 'B':0, 'C':0, 'D':0, 'E':0, 'F':0, 'G':0, 'H':0, 'I':0, 'J':0, 'K':0, 'L':0, 'M':0, 'N':0, 'O':0, 'P':0, 'Q':0, 'R':0, 'S':0, 'T':0, 'U':0, 'V':0, 'W':0}
path = {'A':'A', 'B':'B', 'C':'C', 'D':'D', 'E':'E', 'F':'F', 'G':'G', 'H':'H', 'I':'I', 'J':'J', 'K':'K', 'L':'L', 'M':'M', 'N':'N', 'O':'O', 'P':'P', 'Q':'Q', 'R':'R', 'S':'S', 'T':'T', 'U':'U', 'V':'V', 'W':'W'}
visited = []
node = startNode;
dist[startNode]=0
currDist = 0

if(d['func'](startn, endn)<d['func'](startn, nodes[startNode])):
    cv2.line(img, startn, endn, (0,0,255), 2)
else:
    while(node!=endNode):
        flag[node]=1
        for neighbour, distance in neigh[node].items():
            if((distance+currDist)<dist[neighbour] and flag[neighbour]!=1):
                dist[neighbour]=distance+currDist
                path[neighbour]=node
        mini = 1000
        minv = startNode
        for a,b in dist.items():
            if(b<mini and flag[a]!=1):
                mini = b
                minv = a
        currDist = d['func'](nodes[minv], nodes[node])
        node = minv

    cur = endNode
    print(path)
    while(cur!=startNode):
        visited.append(cur)
        cur = path[cur]
    visited.append(startNode)
    for i in range(len(visited)-1):
        cv2.line(img, nodes[visited[i]], nodes[visited[i+1]], (0,0,255), 2)
    cv2.line(img, nodes[st], startn, (0,0,255), 2)
    cv2.line(img, nodes[en], endn, (0,0,255), 2)

cv2.imshow('image',img)
cv2.waitKey(0)
cv2.destroyAllWindows()
