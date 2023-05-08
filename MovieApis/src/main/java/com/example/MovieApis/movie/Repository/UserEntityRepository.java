package com.example.MovieApis.movie.Repository;




import org.springframework.data.repository.CrudRepository;

import com.example.MovieApis.movie.model.UserEntity;

public interface UserEntityRepository extends CrudRepository<UserEntity, Long> {


}
