/*Write a file program to copy one file into another file. Use exception handling to
raise and handle exception for source file not found.*/

#include<iostream>
#include<conio.h>
#include<fstream>
using namespace std;
int main ()
{
    fstream a, b;
    char ch;
    a.open("log1.txt"); //The file from which the content will be copied
    try {
        if (a.fail())
        {
            throw 1.7f;
        }
        else
        {
            b.open("log2.txt", ios::out); //The file to which the content will be copied
            while (!a.eof())
            {
                a.get(ch); //reading from file object 'a'
                cout << ch;
                b << ch; //writing to file log2.txt
            }
            a.close();
            b.close();
        }
    }
    catch (float x)
    {
        cout << "SOURCE FILE NOT FOUND";
    }
    return 0;
}
