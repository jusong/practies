/*****************************************************************
 * 文件名称：test_case.c
 * 创 建 者：blacknc <jusonlinux@163.com>
 * 创建日期：2018-04-04 16:17
 * 描    述：
 *****************************************************************/

#include <stdio.h>

int
main(void) {
    int i = 10;
    switch (i) {
    case 1:
        int j = 10; //case是标签语法，不可以定义变量，同样的goto语句也不可以
        break;
    }
    return 0;
}
