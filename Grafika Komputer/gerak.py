from OpenGL.GL import *
from OpenGL.GLU import *
from OpenGL.GLUT import *
import random
import Zombie_Normal
import Zombie_Mini


def posisi_ZNormal():
    global y, a, pdh
    y = 5
    a = 1
    pdh = random.randrange(-22, 10)


def posisi_ZMini():
    global y, a, pdhm
    y = 5
    a = 1
    pdhm = random.randrange(-29, 6)


def kanvas_normal():
    global y, a, pdh
    if y >= -45:
        y -= a
        Zombie_Normal.canvas(pdh, y)
    else:
        y = y
        posisi_ZNormal()


def kanvas_mini():
    global y, a, pdhm
    if y >= -45:
        y -= a
        Zombie_Mini.canvas(pdhm, y)


posisi_ZNormal()
posisi_ZMini()


# def update(value):
#     glClear(GL_COLOR_BUFFER_BIT)
#     glutPostRedisplay()
#     glutTimerFunc(1000,update,0)


# def main():
#     glutInit(sys.argv)
#     glutInitDisplayMode(GLUT_SINGLE|GLUT_RGB)
#     glutInitWindowSize(500,500)
#     glutInitWindowPosition(100,100)
#     glutCreateWindow("Eveng Handling Keyboard & Mouse")
#     glutDisplayFunc(kanvas)
#     glutTimerFunc(50, update, 0)

#     init()
#     glutMainLoop()

# main()
