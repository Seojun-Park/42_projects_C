/* ************************************************************************** */
/*                                                                            */
/*                                                        :::      ::::::::   */
/*   ft_count_word.c                                    :+:      :+:    :+:   */
/*                                                    +:+ +:+         +:+     */
/*   By: jinpark <marvin@42.fr>                     +#+  +:+       +#+        */
/*                                                +#+#+#+#+#+   +#+           */
/*   Created: 2019/02/14 16:24:31 by jinpark           #+#    #+#             */
/*   Updated: 2019/02/19 21:12:03 by jinpark          ###   ########.fr       */
/*                                                                            */
/* ************************************************************************** */

#include "libft.h"

size_t	ft_count_word(char *s, char c)
{
	size_t i;

	i = 0;
	while (*s == c)
		s++;
	while (*s)
	{
		while (*s && *s != c)
			s++;
		while (*s == c)
			s++;
		i++;
	}
	return (i);
}