from OpenGL.GL import*
from OpenGL.GLU import*
from OpenGL.GLUT import*


def canvas(pdh, y):
    # Kepala
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(9.2720101416477+pdh, 19.9218556532744+y)  # i6
    glVertex2f(10.6918960368181+pdh, 19.9273167528712+y)  # j6
    glVertex2f(10.6918960368181+pdh, 19.399382663724+y)  # k6
    glVertex2f(9.2720101416477+pdh, 19.399382663724+y)  # h6

    glEnd()
    glFlush()

    # Mata kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(10.2+pdh, 19.8+y)  # v6
    glVertex2f(10.6+pdh, 19.8+y)  # a7
    glVertex2f(10.6+pdh, 19.6+y)  # z6
    glVertex2f(10.2+pdh, 19.6+y)  # w6

    glEnd()
    glFlush()

    # Mata kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(9.4+pdh, 19.8+y)  # r6
    glVertex2f(9.8+pdh, 19.8+y)  # s6
    glVertex2f(9.8+pdh, 19.6+y)  # t6
    glVertex2f(9.4+pdh, 19.6+y)  # u6

    glEnd()
    glFlush()

    # Badan
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(8.4973917245103+pdh, 19.399382663724+y)  # f6
    glVertex2f(11.5045741977724+pdh, 19.399382663724+y)  # g6
    glVertex2f(11.5+pdh, 19+y)  # o5
    glVertex2f(8.5+pdh, 19+y)  # j5

    glEnd()
    glFlush()

    # Pinggang
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(9.2633220286528+pdh, 18.9913587515181+y)  # n5
    glVertex2f(10.7099823177615+pdh, 18.9995955179946+y)  # s5
    glVertex2f(10.6953044960711+pdh, 17.4951187947327+y)  # t5
    glVertex2f(9.2684107805498+pdh, 17.5054431975864+y)  # u5

    glEnd()
    glFlush()

    # lengan Kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129+y)
    glVertex2f(8.5+pdh, 19+y)  # j5
    glVertex2f(9+pdh, 19+y)  # m5
    glVertex2f(9+pdh, 18+y)  # l5
    glVertex2f(8.5+pdh, 18+y)  # k5

    glEnd()
    glFlush()

    # lengan kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(11+pdh, 19+y)  # r5
    glVertex2f(11.5+pdh, 19+y)  # o5
    glVertex2f(11.5+pdh, 18+y)  # p5
    glVertex2f(11+pdh, 18+y)  # q5

    glEnd()
    glFlush()

    # Kaki kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(9.4030595520728+pdh, 17.5044689357015+y)  # v5
    glVertex2f(9.843520096071+pdh, 17.5012819484382+y)  # a6
    glVertex2f(9.8219741054946+pdh, 16.4970269197882+y)  # z5
    glVertex2f(9.4036561873193+pdh, 16.4970269197882+y)  # w5

    glEnd()
    glFlush()

    # Kaki kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 229, 129)
    glVertex2f(10.1581110368386+pdh, 17.4990057006902+y)  # e6
    glVertex2f(10.5936733912901+pdh, 17.4958541546665+y)  # b6
    glVertex2f(10.6072375659289+pdh, 16.489688008943+y)  # c6
    glVertex2f(10.1595640043729+pdh, 16.489688008943+y)  # d6

    glEnd()
    glFlush()

    # Luka Baju kiri
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(8.4973917245103+pdh, 19.399382663724+y)  # f6
    glVertex2f(8.8712079832091+pdh, 19.399382663724+y)  # t7
    glVertex2f(8.8417972759796+pdh, 19.2525581422365+y)  # s7
    glVertex2f(8.7859169322437+pdh, 19.1437385254876+y)  # r7
    glVertex2f(8.6+pdh, 19+y)  # q7
    glVertex2f(8.6+pdh, 19+y)  # p7
    glVertex2f(8.5+pdh, 19+y)  # j5

    glEnd()
    glFlush()

    # Luka Lengan Kanan
    glBegin(GL_POLYGON)
    glColor3ub(255, 0, 0)
    glVertex2f(11.3494447698939+pdh, 18.4967502743385+y)  # z7
    glVertex2f(11.5+pdh, 18.5405968460985+y)  # a8
    glVertex2f(11.5+pdh, 18+y)  # p5
    glVertex2f(11.1825581972132+pdh, 18+y)  # u7
    glVertex2f(11.2129012104279+pdh, 18.1730914667154+y)  # v7
    glVertex2f(11.3039302500719+pdh, 18.3096350261814+y)  # w7

    glEnd()
    glFlush()

    # Tali kiri
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(9.4571039994018+pdh, 19.399382663724+y)  # b7
    glVertex2f(9.6611503856909+pdh, 19.399382663724+y)  # h7
    glVertex2f(9.6652917744514+pdh, 18.6038839484385+y)  # i7
    glVertex2f(9.4571039994018+pdh, 18.604749021155+y)  # c7

    glEnd()
    glFlush()

    # Tali kanan
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(10.4+pdh, 19.399382663724+y)  # e7
    glVertex2f(10.6+pdh, 19.4+y)  # g7
    glVertex2f(10.6+pdh, 18.6+y)  # d7
    glVertex2f(10.4+pdh, 18.6+y)  # f7

    glEnd()
    glFlush()

    # Kain Kantong
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(9.4571039994018+pdh, 18.604749021155+y)  # c7
    glVertex2f(10.6+pdh, 18.6+y)  # d7
    glVertex2f(10.6+pdh, 18+y)  # k7
    glVertex2f(9.4540035470795+pdh, 18.0056479637251+y)  # j7

    glEnd()
    glFlush()

    # Kantong
    glBegin(GL_POLYGON)
    glColor3ub(255, 255, 255)
    glVertex2f(9.6776744452353+pdh, 18.36710422134+y)  # l7
    glVertex2f(10.3976205754226+pdh, 18.3647359774907+y)  # m7
    glVertex2f(10.2910496022041+pdh, 18.1658034941495+y)  # o7
    glVertex2f(9.7652994676594+pdh, 18.1705399818481+y)  # n7

    glEnd()
    glFlush()

    # Tali bawah kiri
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(9.4540035470795+pdh, 18.0056479637251+y)  # j7
    glVertex2f(9.4540035470795+pdh, 18.0056479637251+y)  # j7
    glVertex2f(9.4030595520728+pdh, 17.5044689357015+y)  # v5
    glVertex2f(9.2684107805498+pdh, 17.5054431975864+y)  # u5

    glEnd()
    glFlush()

    # Tali bawah kanan
    glBegin(GL_POLYGON)
    glColor3ub(94, 77, 35)
    glVertex2f(10.6+pdh, 18+y)  # k7
    glVertex2f(10.6+pdh, 18+y)  # k7
    glVertex2f(10.6953044960711+pdh, 17.4951187947327+y)  # t5
    glVertex2f(10.5936733912901+pdh, 17.4958541546665+y)  # d8

    glEnd()
    glFlush()
