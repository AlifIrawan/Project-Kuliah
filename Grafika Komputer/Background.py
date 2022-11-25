from OpenGL.GL import *
from OpenGL.GLU import *
from OpenGL.GLUT import *


def aspal():
    glPointSize(1)
    glBegin(GL_QUADS)
    glColor3ub(198, 138, 89)

    glVertex2f(-20, 20)
    glVertex2f(20, 20)
    glVertex2f(20, -30)
    glVertex2f(-20, -30)

    glEnd()
    glFlush()


def garisputih():
    glPointSize(1)
# 1
    glBegin(GL_QUADS)
    glColor3ub(255, 255, 255)

    glVertex2f(-1, -30)
    glVertex2f(1, -30)
    glVertex2f(1, -24)
    glVertex2f(-1, -24)

    glEnd()
    glFlush()
# 2
    glBegin(GL_QUADS)
    glColor3ub(255, 255, 255)

    glVertex2f(-1, -20)
    glVertex2f(1, -20)
    glVertex2f(1, -14)
    glVertex2f(-1, -14)

    glEnd()
    glFlush()
# 3
    glBegin(GL_QUADS)
    glColor3ub(255, 255, 255)

    glVertex2f(-1, -10)
    glVertex2f(1, -10)
    glVertex2f(1, -4)
    glVertex2f(-1, -4)

    glEnd()
    glFlush()
# 4
    glBegin(GL_QUADS)
    glColor3ub(255, 255, 255)

    glVertex2f(-1, 0)
    glVertex2f(1, 0)
    glVertex2f(1, 6)
    glVertex2f(-1, 6)

    glEnd()

    glFlush()
# 5
    glBegin(GL_QUADS)
    glColor3ub(255, 255, 255)

    glVertex2f(-1, 10)
    glVertex2f(1, 10)
    glVertex2f(1, 16)
    glVertex2f(-1, 16)

    glEnd()
    glFlush()


def gradasi_aspal_kiri():
    glPointSize(1)
    glBegin(GL_POLYGON)
    glColor3ub(134, 84, 57)

    glVertex2f(-16.5935, 20)
    glVertex2f(-14.8730823391585, 15.0591529126151)
    glVertex2f(-15.3018503127147, 11.9182155518996)
    glVertex2f(-15.3018503127147, 11.9182155518996)
    glVertex2f(-15.1830574122144, 6.3349492283857)
    glVertex2f(-14.2327142082121, 3.246333815378)
    glVertex2f(-14, 0)
    glVertex2f(-15.0668263861428, -2.214128760864)
    glVertex2f(-15.6735959951736, -6.1711465551626)
    glVertex2f(-15, -10)
    glVertex2f(-14.7265302084601, -11.6956969776578)
    glVertex2f(-13.6860484437535, -13.9102825964051)
    glVertex2f(-12.2861912903378, -17.7406857455354)
    glVertex2f(-12.2531831062776, -21.1390447811974)
    glVertex2f(-12.8941119719634, -23.3021797028866)
    glVertex2f(-14.4163180279669, -25.8658951656294)
    glVertex2f(-14.1968467929593, -28.9358610058285)
    glVertex2f(-15, -30)
    glVertex2f(-20, -30)
    glVertex2f(-20, 20)

    glEnd()
    glFlush()


def gradasi_aspal_kanan():
    glPointSize(1)
    glBegin(GL_POLYGON)
    glColor3ub(134, 84, 57)

    glVertex2f(11.7477, 20)
    glVertex2f(13.9866346469667, 16.5506078580791)
    glVertex2f(14.514762715606, 13.1051008641174)
    glVertex2f(13.4615666864947, 6.690179595894)
    glVertex2f(14.1317823413837, 3.2433562278933)
    glVertex2f(16.4296645867175, -2.6928395725522)
    glVertex2f(16.7168998673842, -7.9588197181088)
    glVertex2f(16.4296645867175, -9.7779764956647)
    glVertex2f(13.844547060717, -15.8099173896658)
    glVertex2f(13.844547060717, -15.8099173896658)
    glVertex2f(13.0785863122724, -20.2141916932222)
    glVertex2f(13.7488019671614, -26.1503874936677)
    glVertex2f(15, -30)
    glVertex2f(20, -30)
    glVertex2f(20, 20)
    glVertex2f(11.7477, 20)

    glEnd()
    glFlush()


def garisbase():
    glPointSize(5)
    glBegin(GL_LINES)
    glColor3ub(255, 0, 0)

    glVertex2f(-20, -28)
    glVertex2f(20, -28)

    glEnd()
    glFlush()
