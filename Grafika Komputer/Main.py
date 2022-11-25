from OpenGL.GL import *
from OpenGL.GLU import *
from OpenGL.GLUT import *
import OpenGL.GLUT as ogl  # Library yang harus ada buat kalimatnya
import Background
import gerak

life = 3
timespent = 0


def drawTextt(x, y, Nama):  # Fungsi buat kalimatnya. Nama -> diisi kalimat yang mau ditulis, x -> koordinat x, y -> koordinat y
    glPushMatrix()
    glColor3ub(255, 255, 255)
    glRasterPos2f(x, y)

    for i in Nama:
        kode = ord(i)
        glutBitmapCharacter(ogl.GLUT_BITMAP_TIMES_ROMAN_24, kode)
    glPopMatrix()


def init():
    glClearColor(0, 1, 1, 1)
    gluOrtho2D(-20, 20, -30, 20)


def zombies(z):
    if z == 1:
        gerak.kanvas_normal()
    elif z == 2:
        gerak.kanvas_mini()


def theme():
    Background.aspal()
    Background.garisputih()
    Background.gradasi_aspal_kiri()
    Background.gradasi_aspal_kanan()
    Background.garisbase()


def gabung():
    global life, timespent
    label = "Score: " + str(timespent)
    nyawa = "Life: " + str(life)
    sign = "Game Over"
    if life > 0:
        theme()
        # Tinggal panggil dan isi x,y sama kalimatnya
        drawTextt(-18, 17, label)
        drawTextt(12, 17, nyawa)

        zombies(1)
        timespent += 1
        print(timespent)
        if gerak.y == -45:
            life -= 1
        if life <= 0:
            drawTextt(-6, -3, sign)
        if timespent > 50:
            zombies(2)


def mouse(button, state, x, y):
    pointerX = (x + 1 - 200) / 10
    pointerY = (y + 102 - 300) / -10
    klik = GLUT_LEFT_BUTTON
    if button == klik and state == GLUT_DOWN:
        print("PointerX : ", pointerX)
        print("PointerY : ", pointerY)

        # Zombie Normal
        dX = gerak.pdh + 4
        dY = gerak.y + 14
        cX = gerak.pdh + 8
        aY = gerak.y + 20

        # Zombie mini
        dXm = gerak.pdhm + 4
        dYm = gerak.y + 14
        cXm = gerak.pdhm + 8
        aYm = gerak.y + 20

        print("dX : ", dX)
        print("dY : ", dY)
        print("cX : ", cX)
        print("aY : ", aY)

        # Zombie Normal
        if pointerX >= dX and pointerX <= cX and pointerY >= dY and pointerY <= aY:
            gerak.posisi_ZNormal()
            gerak.kanvas_normal()
        else:
            print("miss")

        # # Zombie mini
        if pointerX >= dXm and pointerX <= cXm and pointerY >= dYm and pointerY <= aYm:
            gerak.posisi_ZMini()
            gerak.kanvas_mini()
        else:
            print("miss")


def update(value):
    glClear(GL_COLOR_BUFFER_BIT)
    glutPostRedisplay()
    glutTimerFunc(180, update, 0)


def main():
    glutInit(sys.argv)
    glutInitDisplayMode(GLUT_SINGLE | GLUT_RGB)
    glutInitWindowSize(400, 600)
    glutInitWindowPosition(0, 0)
    glutCreateWindow("Zombie Defense")
    glutTimerFunc(10, update, 0)
    glutDisplayFunc(gabung)
    glutMouseFunc(mouse)
    init()
    glutMainLoop()


main()
