package com.example.MovieApis.movie;


import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;


import com.example.MovieApis.movie.Repository.UserInfoRepository;

import com.example.MovieApis.movie.model.UserInfo;

@Service
public class UserService {
    

    @Autowired
    UserInfoRepository userInfoRepository ;
    

    public UserInfo saveCredentials(UserInfo u ){
        userInfoRepository.save(u) ;
        return u ;
    }

    public boolean login(String name  , String Password)
    {
        Iterable<UserInfo> list = userInfoRepository.findAll();
        for( UserInfo user :list )
        {
            if(user.getName()== name && user.getPassword() == Password){
                return  true ; 
            }

        }
        return false ;
    }

    
}
