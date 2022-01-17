/**
 * 用这种特殊的注释可自动创建文档的注释(帮你补全)
 * 定义class用大驼峰命名法
 * 定义变量，方法用小驼峰命名法
 */

public class App {
    // 基本类型：byte, short, int, long, foat, double, boolean, char(ASCII & Unicode)
    // add l after declair long
    long longNumb = 389019238l;
    
    // add f after declair float 
    float floatNumb = 3.14f;

    // 引用类型
    // constant using final to declair
    final int constantInt = 10;

    // ++ -- 自增/减运算和C一样，有优先级，想清楚是要先加还是先赋值
    
    /* logic 
    and &
    or |
    not ~
    xor ^
    位运算就是二进制竖式，用逻辑算出结果
    */

    public static void main(String[] args) throws Exception {
        // this is a single line comment
        System.out.println("Hello, World!");
    }
}
