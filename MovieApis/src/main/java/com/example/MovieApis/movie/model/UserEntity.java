package com.example.MovieApis.movie.model;





//import jakarta.persistence.Column;
import jakarta.persistence.Entity;
import jakarta.persistence.GeneratedValue;
import jakarta.persistence.GenerationType;
import jakarta.persistence.Id;

@Entity
public class UserEntity {
    
    @Id
    @GeneratedValue(strategy=GenerationType.IDENTITY)
    private long id ;

    //@Column
    private String Book_name ;

    public String getBook_name(){
        return Book_name ;
    }
    public void setBook_name(String Book_name){
        this.Book_name = Book_name ;
    }
    public long getId() { return id ;}
    public void setId(long Id) { this.id = Id ; }
    


    
}
