#include<iostream>
#include<vector>
using namespace std;

void createMatrices(int ordo)
{
    std::vector< std::vector<int> > matrices ( ordo, std::vector<int> ( ordo) );
    
    int sum =0;
    for( int i=0; i < ordo; i++ )
    {
        for( int j=0; j < ordo; j++ )
        {
            matrices[i][j] = rand() % 10;
            if( i == j || i + j == ordo - 1 ) sum += matrices[i][j] ;
            cout<<matrices[i][j]<<" ";
        }   
        cout<<endl;
    }
    cout<<"Total :"<<sum<<endl;
}

int main()
{
    createMatrices(4); 
    return 0;
}