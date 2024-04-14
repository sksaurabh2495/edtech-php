import React, { useState } from 'react';
import axios from 'axios';

const EnrollCourse = ({ courseId, userId }) => {
  const [enrolled, setEnrolled] = useState(false);

  const handleEnroll = () => {
    // Send enrollment request to the backend API
    axios.post('http://localhost:80/enroll_course.php', { userId, courseId })
      .then(response => {
        setEnrolled(true);
      })
      .catch(error => {
        console.error('Error enrolling in course:', error);
      });
  };

  return (
    <div>
      {enrolled ? (
        <p>Enrolled successfully!</p>
      ) : (
        <button onClick={handleEnroll}>Enroll in Course</button>
      )}
    </div>
  );
};

export default EnrollCourse;
