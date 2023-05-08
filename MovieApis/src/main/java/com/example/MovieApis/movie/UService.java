package com.example.MovieApis.movie;

import java.util.ArrayList;
import java.util.List;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.example.MovieApis.movie.Repository.UserEntityRepository;
import com.example.MovieApis.movie.Repository.UserInfoRepository;
import com.example.MovieApis.movie.model.TrialModel;
import com.example.MovieApis.movie.model.UserEntity;
import com.example.MovieApis.movie.model.UserInfo;

@Service
public class UService {
    @Autowired
    UserEntityRepository movieRepository ;
    @Autowired 
    UserInfoRepository userInfoRepository ;

    public Object getMovies(){
        

        List<TrialModel> movies = new ArrayList<>() ;
        
        movies.add(new TrialModel("Mirage","" , 9.8 , ""));
        movies.add(new TrialModel("avenger","",8.2,""));

        return movies ;
    }
    public UserEntity save(UserEntity u ){
        movieRepository.save(u); 
        return u;
    }

    public UserInfo saveCredentials(UserInfo u ){
        userInfoRepository.save(u) ;
        return u ;
    }

    public boolean login(String name  , String Password)
    {
        Iterable<UserInfo> list = userInfoRepository.findAll();
        for( UserInfo user :list )
        {   
            
            
            if(user.getName().equals(name) && user.getPassword().equals(Password)){
                return  true ; 
            }

        }
        return false ;
    }

    
}
