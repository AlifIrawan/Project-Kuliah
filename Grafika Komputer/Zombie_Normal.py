from OpenGL.GL import*
from OpenGL.GLU import*
from OpenGL.GLUT import*



def canvas(pdh, y):
    # Rambut
    glBegin(GL_LINES)
    glColor3ub(0, 0, 0)

    glVertex2f(3.7154559896888+pdh, 19.800089499779+y)  # e3
    glVertex2f(3.8565907451929+pdh, 19.9706244367136+y)  # f3

    glVertex2f(3.8+pdh, 19.8+y)  # n2
    glVertex2f(3.8488043723619+pdh, 19.8655084034947+y)  # o2

    glVertex2f(3.9+pdh, 19.8+y)  # q2
    glVertex2f(3.9909056765281+pdh, 19.9219596065197+y)  # r2

    glVertex2f(4.016211388229+pdh, 19.7991945480387+y)  # s2
    glVertex2f(4.1213274214478+pdh, 19.9316925725584+y)  # t2

    glVertex2f(4.1213274214478+pdh, 19.7991945480387+y)  # u2
    glVertex2f(4.175832031265+pdh, 19.8771879627413+y)  # v2

    glVertex2f(4.2186570818357+pdh, 19.7991945480387+y)  # w2
    glVertex2f(4.3588117927942+pdh, 19.9647846570903+y)  # z2

    glVertex2f(4.3+pdh, 19.7991945480387+y)  # a3
    glVertex2f(4.3607583860019+pdh, 19.8616152170792+y)  # b3

    glVertex2f(4.3716418848875+pdh, 19.7988726275147+y)  # c3
    glVertex2f(4.4386221143122+pdh, 19.8849743355723+y)  # d3

    glEnd()
    glFlush()

    # Kepala
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(3.637372729041+pdh, 19.7991945480387+y)  # O
    glVertex2f(4.4890157720996+pdh, 19.7991945480387+y)  # P
    glVertex2f(4.4967139120283+pdh, 18.9940836524233+y)  # N
    glVertex2f(3.6374727962254+pdh, 19.0031282957475+y)  # M

    glEnd()
    glFlush()

    # Luka Kepala Kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(3.637372729041+pdh, 19.7991945480387+y)  # O
    glVertex2f(3.9513542623382+pdh, 19.7991945480387+y)  # S1
    glVertex2f(3.8875277322359+pdh, 19.7197310920605+y)  # r1
    glVertex2f(3.8130634471165+pdh, 19.70696578604+y)  # q1
    glVertex2f(3.7726399780518+pdh, 19.6325015009207+y)  # p1
    glVertex2f(3.6939205909256+pdh, 19.6473943579445+y)  # o1
    glVertex2f(3.6747726318949+pdh, 19.5835678278422+y)  # n1
    glVertex2f(3.6373971594452+pdh, 19.6048429187031+y)  # m1

    glEnd()
    glFlush()

    # Luka Kepala Kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(4.2186570818357+pdh, 19.7991945480387+y)  # w2
    glVertex2f(4.4890157720996+pdh, 19.7991945480387+y)  # P
    glVertex2f(4.4909497218895+pdh, 19.5969321753235+y)  # j3
    glVertex2f(4.3627049792097+pdh, 19.651383150641+y)  # i3
    glVertex2f(4.3335060810933+pdh, 19.7000479808354+y)  # h3
    glVertex2f(4.23228323429+pdh, 19.7311934721595+y)  # g3

    glEnd()
    glFlush()

    # Mata Kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(3.7471069442025+pdh, 19.5267969905394+y)  # t1
    glVertex2f(3.9960328334098+pdh, 19.5282515017536+y)  # u1
    glVertex2f(3.9960328334098+pdh, 19.4495321146274+y)  # w1
    glVertex2f(3.7471093660108+pdh, 19.447404563624+y)  # v1

    glEnd()
    glFlush()

    # Mata Kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(4.1768746686996+pdh, 19.5218688487433+y)  # z1
    glVertex2f(4.4293876389662+pdh, 19.5221556252689+y)  # c2
    glVertex2f(4.4305479802838+pdh, 19.4467334396233+y)  # b2
    glVertex2f(4.1764332317238+pdh, 19.4467334396233+y)  # a2

    glEnd()
    glFlush()

    # Mulut
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(3.8+pdh, 19.3+y)  # d2
    glVertex2f(4.3+pdh, 19.3+y)  # g2
    glVertex2f(4.1068127526663+pdh, 19.1264792359587+y)  # f2
    glVertex2f(3.8399342496125+pdh, 19.1125551401472+y)  # e2

    glEnd()
    glFlush()

    # Gigi Atas
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(3.8+pdh, 19.3+y)  # d2
    glVertex2f(4.3+pdh, 19.3+y)  # g2
    glVertex2f(4.1972374391745+pdh, 19.2076986793104+y)  # l2
    glVertex2f(3.8199671248063+pdh, 19.2062775700736+y)  # h2

    glEnd()
    glFlush()

    # Gigi Atas Kosong
    glBegin(GL_POLYGON)
    glColor3ub(0, 0, 0)
    glVertex2f(3.8+pdh, 19.3+y)  # j2
    glVertex2f(4.1+pdh, 19.3+y)  # m2
    glVertex2f(4.1+pdh, 19.2+y)  # k2
    glVertex2f(4+pdh, 19.2+y)  # i2

    glEnd()
    glFlush()

    # Gigi bawah
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(3.8199671248063+pdh, 19.2062775700736+y)  # h2
    glVertex2f(4.1972374391745+pdh, 19.2076986793104+y)  # l2
    glVertex2f(4.1068127526663+pdh, 19.1264792359587+y)  # f2
    glVertex2f(3.8399342496125+pdh, 19.1125551401472+y)  # e2

    glEnd()
    glFlush()

    # Baju
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(2.2777781089471+pdh, 18.9934006235336+y)  # q
    glVertex2f(5.8385347583054+pdh, 18.9889573480323+y)  # a1
    glVertex2f(5.8375274316746+pdh, 17.9971497408336+y)  # e5
    glVertex2f(2.2736330394917+pdh, 17.9985839542261+y)  # p2

    glEnd()
    glFlush()

    # Luka Bahu kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(5.1460737147887+pdh, 18.9897623730783+y)  # w3
    glVertex2f(5.8385347583054+pdh, 18.9889573480323+y)  # a1
    glVertex2f(5.8380036119189+pdh, 18.4659938815853+y)  # d4
    glVertex2f(5.5713342659968+pdh, 18.4240235230176+y)  # c4
    glVertex2f(5.4385404351898+pdh, 18.4696714023575+y)  # b4

    glEnd()
    glFlush()

    # Katok
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(3.2751599613375+pdh, 18.0013852966831+y)  # u
    glVertex2f(4.7369816270573+pdh, 18.0072225629716+y)  # c1
    glVertex2f(4.7513630644231+pdh, 16.0026573920023+y)  # d1
    glVertex2f(3.260134247909+pdh, 15.9991403429067+y)  # v

    glEnd()
    glFlush()

    # Lengan Kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(2.2736330394917+pdh, 17.9985839542261+y)  # p2
    glVertex2f(3+pdh, 18+y)  # t
    glVertex2f(3+pdh, 16+y)  # s
    glVertex2f(2.2652948423577+pdh, 15.9974166420796+y)  # r

    glEnd()
    glFlush()

    # Luka lengan kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(2.2705506637089+pdh, 17.2588137663535+y)  # n4
    glVertex2f(2.5113992366517+pdh, 17.2635764413288+y)  # o4
    glVertex2f(2.6975086577304+pdh, 17.1633636761325+y)  # p4
    glVertex2f(2.778633277175+pdh, 17.0440627651846+y)  # q4
    glVertex2f(2.6975086577304+pdh, 16.8865855627333+y)  # r4
    glVertex2f(2.6975086577304+pdh, 16.6527557772754+y)  # s4
    glVertex2f(2.4358533424011+pdh, 16.6078536126416+y)  # t4
    glVertex2f(2.2663238291809+pdh, 16.7573339768432+y)  # u4

    glEnd()
    glFlush()

    # Lengan Kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(5+pdh, 18+y)  # z
    glVertex2f(5.8375274316746+pdh, 17.9971497408336+y)  # e5
    glVertex2f(5.8355090869237+pdh, 16.009899908669+y)  # b1
    glVertex2f(5+pdh, 16+y)  # w

    glEnd()
    glFlush()

    # Kaki kiri
    glBegin(GL_POLYGON)
    glColor3ub(42, 72, 141)
    glVertex2f(3.260134247909+pdh, 15.9991403429067+y)  # v
    glVertex2f(3.8093994512202+pdh, 16.000435779707+y)  # i1
    glVertex2f(3.8+pdh, 14+y)  # g1
    glVertex2f(3.260370610248+pdh, 14.0051930958923+y)  # e1

    glEnd()
    glFlush()

    # Kaki Kanan
    glBegin(GL_POLYGON)
    glColor3ub(42, 72, 141)
    glVertex2f(4.2378738964725+pdh, 15.9956232938111+y)  # j1
    glVertex2f(4.7513630644231+pdh, 16.0026573920023+y)  # d1
    glVertex2f(4.7518998976476+pdh, 13.9920325433564+y)  # f1
    glVertex2f(4.2561857521295+pdh, 13.9876456925111+y)  # h1

    glEnd()
    glFlush()

    # Luka diCelana
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(3.4657414753658+pdh, 15.2010766494791+y)  # w4
    glVertex2f(3.6284750105452+pdh, 15.309565672932+y)  # z4
    glVertex2f(3.7244460697535+pdh, 15.2010766494791+y)  # a5
    glVertex2f(3.6975001977737+pdh, 14.9367507042401+y)  # b5
    glVertex2f(3.6201297010488+pdh, 14.7671205556674+y)  # c5
    glVertex2f(3.4+pdh, 15+y)  # v4

    glEnd()
    glFlush()

